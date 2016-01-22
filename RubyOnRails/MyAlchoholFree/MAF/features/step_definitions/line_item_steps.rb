Given(/^I have a new item (.+)$/) do |items|
  items.split(',').each do |items|
    LineItem.create!
  end
end

Then(/^I check the cart$/) do
  visit('/line_items')
end

Then(/^I will see "(.*?)"$/) do |arg1|
end


Then(/^I press button "(.*?)"$/) do |arg1|
  LineItem.delete_all
end

Then(/^I should see (\d+) lineItem$/) do |item|
  LineItem.count.should == item.to_i
end
