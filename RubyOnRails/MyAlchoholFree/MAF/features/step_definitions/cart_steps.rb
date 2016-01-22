Given(/^I have a new cart Cart$/) do
  cart = Cart.create!
end

Then(/^I can see "(.*?)"$/) do |arg1|
end
Then(/^I press "(.*?)" and see the Order page$/) do |arg1|
  new_order_path
end

Then(/^I press "(.*?)"$/) do |arg1|
  Cart.delete_all
end

Then(/^I should see (\d+) cart$/) do |expected_cart|
  Cart.count.should == expected_cart.to_i
end

