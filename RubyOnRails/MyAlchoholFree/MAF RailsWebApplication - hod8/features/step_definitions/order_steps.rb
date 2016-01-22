Given(/^I have order name (.+)$/) do |orders|
  orders.split(',').each do |order|
    Order.create!(:name => "Hongyi", :address => 'My address',
                  :email => "Hod8@aber.ac.com", :phone => 12345)
  end
end

When(/^I go to the list of orders$/) do
  visit('/orders')
end


Then(/^I delete Order$/) do
  Order.delete_all
end

Then(/^I have (\d+) orders$/) do |expected_order|
  Order.count.should == expected_order.to_i   
end

Then(/^I Will go to the Home Page$/) do
  store_path
end

