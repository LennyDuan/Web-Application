require 'factory_girl'
FactoryGirl.define do
  factory :product do |f|
    f.title   'testproduct_title'
    f.description 'testuser_firstname'
    f.image_url 'test.jpg'
    f.price 10
    f.origin 'testorigin' 
    f.grape 'testgreat'
    f.content 1.2
    f.size 600
    f.company 'testcompany'
  end
end


