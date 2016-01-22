Given(/^we have the following Products:$/) do |products|
  products_attributes = products.hashes.map { |tab_product_attrs|
    product_attrs = 
      FactoryGirl.attributes_for(:product).stringify_keys
    product_attrs.merge(tab_product_attrs) 
  }
  Product.create!(products_attributes)
end
When(/^I search for Product "(.*?)"$/) do |query|
  visit('/products')
  fill_in('query', with: query)
  click_button ('Search')
end

Then(/^the result:$/) do |expected_results|
  results = [['title','description']] +
    all('tr.data').map {|tr|
    [ tr.find('.title').text,
      tr.find('.description').text]
  }
    expected_results.diff!(results)
end


Given(/^I have wine title (.+)$/) do |titles|
  titles.split(',').each do |title|
    Product.create!(:title => title,:description => 'description',
                    :image_url => 'Three.jpg', 
                    :price =>20.05,
                    :origin =>'England',
                    :grape =>'Reichensteiner',
                    :content =>8.00,
                    :size =>850,
                    :company=> 'Three Mills')
  end
end

When(/^I go to the list of wines$/) do
  visit('/products')
end

Then(/^I should see "(.*?)"$/) do |arg1|
end


Given(/^I am on the list of wine$/) do
  visit('/products')
end

Then(/^I delete Wine$/) do
  Product.delete_all
end

Then(/^I have ([0-9]+) wines$/) do |wine|
  Product.delete_all
  Product.count.should == wine.to_i
end
