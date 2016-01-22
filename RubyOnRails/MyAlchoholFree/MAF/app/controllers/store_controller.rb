class StoreController < ApplicationController
  include CurrentCart
  before_action :set_cart
  def search
    @products = Product
    .like(params[:query])
    .order('title, origin, description')
    render 'store/index'

  end
  def index
    @products = Product
    .order('title, origin, description')
    self.load_product
  end


  def load_product
    url_80 = URI.parse('http://localhost:8080//wines') 
    req = Net::HTTP::Get.new(url_80.to_s)

    begin
      res = Net::HTTP.start(url_80.host, url_80.port) {|http|
        http.request(req)
      } 
      product = res.body
      dict = JSON.parse(product)

      (0..dict.length-1).each do |i|
        @products = Product
        .order('title')
        @products.each do |product|
          next if product.title == dict[i]["title"] 
          Product.create(
            title: dict[i]["title"],
            description: dict[i]["description"],
            image_url: dict[i]["image_url"],
            price: dict[i]["price"].to_i,
            origin: dict[i]["origin"],
            grape: dict[i]["grape"],
            content: dict[i]["content"].to_i,
            size: dict[i]["size"].to_i,
            company: dict[i]["company"]) 
        end
      end
    rescue 
    end
  end

end
