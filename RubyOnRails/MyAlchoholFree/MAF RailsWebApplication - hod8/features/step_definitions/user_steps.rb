Given(/^I go to the registration pages$/) do
  visit('/users/sign_up')
end

Given(/^I fill in "(.*?)" with "(.*?)"$/) do |arg1, arg2|
end

When(/^I go to the main page$/) do
  store_path
end

Then(/^I can see welcome\.$/) do
end

Given(/^I go to the login pages$/) do
  visit('/users/sign_in')
end

Given(/^I have login$/) do
end

When(/^I click logout button$/) do
end

Then(/^I can see I have log out\.$/) do
end


