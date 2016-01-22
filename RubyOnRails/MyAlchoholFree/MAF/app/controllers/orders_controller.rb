class OrdersController < ApplicationController
  include CurrentCart
  before_action :set_cart, only: [:new, :create]
  before_action :set_order, only: [:show, :edit, :update, :destroy]
  before_action :authenticate_user!, :except => [:index]

  # GET /orders
  # GET /orders.json
  def index
    @orders = Order.all
  end

  # GET /orders/1
  # GET /orders/1.json
  def show
  end

  # GET /orders/new
  def new
    if @cart.line_items.empty?
        redirect_to store_url, notice: "Thanks"
        return 
    end
    @order = Order.new
  end

  # GET /orders/1/edit
  def edit
  end

  # POST /orders
  # POST /orders.json
  def create
    @order = Order.new(order_params)
    @order.add_line_items_from_cart(@cart)

    respond_to do |format|
      if @order.save

        @wine_title = "["
        @cart.line_items.each do |line_item|
          @wine_title += line_item.quantity.to_s
          @wine_title += ' items: '
          @wine_title += line_item.product.title
          @wine_title += ';'
        end
        @wine_title += "]"

        data = {'name' => @order.name, 'address' => @order.address,
                'email' => @order.email, 'phone' => @order.phone, 
                'wine' => @wine_title}

        url = URI.parse('http://localhost:8080/order')
        req = Net::HTTP::Post.new(url,nitheader = {'Content-Type' =>'application/js    on'})
        req.set_form_data(data)
        req.body = data.to_json
        begin
          res = Net::HTTP.start(url.host, url.port) {|http|
            http.request(req)
          }
        rescue
        end

        Cart.destroy(session[:cart_id])
        session[:cart_id] = nil
        OrderNotifier.received(@order).deliver
        format.html { redirect_to store_url}
        format.json { render action: 'show', status: :created,
                      location: @order }
      else
        format.html { render :new }
        format.json { render json: @order.errors, status: :unprocessable_entity }
      end
    end
  end

  # PATCH/PUT /orders/1
  # PATCH/PUT /orders/1.json
  def update
    respond_to do |format|
      if @order.update(order_params)
        format.html { redirect_to @order, notice: 'Order was successfully updated.' }
        format.json { render :show, status: :ok, location: @order }
      else
        format.html { render :edit }
        format.json { render json: @order.errors, status: :unprocessable_entity }
      end
    end
  end

  # DELETE /orders/1
  # DELETE /orders/1.json
  def destroy
    @order.destroy
    respond_to do |format|
      format.html { redirect_to orders_url, notice: 'Order was successfully destroyed.' }
      format.json { head :no_content }
    end
  end

  private
  # Use callbacks to share common setup or constraints between actions.
  def set_order
    @order = Order.find(params[:id])
  end

  # Never trust parameters from the scary internet, only allow the white list through.
  def order_params
    params.require(:order).permit(:name, :address, :email, :phone)
  end
end
