require 'test_helper'

class OrderTest < ActiveSupport::TestCase
  fixtures :orders

   test "invalid order email"  do
     order = Order.new(name: orders(:OD2).name,
                       phone:orders(:OD2).phone,
                       address: orders(:OD2).address,
                       email: orders(:OD2).email
                      )
     assert order.invalid?
     assert_equal ["is invalid"], order.errors[:email]
   end

   test "new order" do
     order = Order.new(name: orders(:OD1).name,
                       phone:orders(:OD1).phone,
                       address: orders(:OD1).address,
                       email: orders(:OD1).email
                      )
     assert order.valid?
   end
end
