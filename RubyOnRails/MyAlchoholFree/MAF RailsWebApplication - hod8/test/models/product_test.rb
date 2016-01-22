require 'test_helper'

class ProductTest < ActiveSupport::TestCase
  fixtures :products

  test "new product" do 
    product = Product.new(title:'wne',
                           description: "This wine",
                           image_url: "111.jpg",
                           price: 9.75,
                           origin: 'Germany',
                           grape: 'Acolon',
                           content: 0.02,
                           size: 750,
                           company: 'ENBIO')
    assert product.valid?
  end

  test "product is not valid" do
    product = Product.new(title:'wne',
                           description: "This wine",
                           image_url: "111.jpg",
                           price: 9.75,
                           origin: 'Germany',
                           grape: 'Acolon',
                           content: 0.02,
                           size: 750,
                           company: 'ENBIO')
    product.title = products(:PD2).title
    assert product.invalid?
    assert_equal ["has already been taken"], product.errors[:title]
  end
  test "Image_url is not valid" do
    product = Product.new(title:'wne',
                           description: "This wine",
                           image_url: "111.jpg",
                           price: 9.75,
                           origin: 'Germany',
                           grape: 'Acolon',
                           content: 0.02,
                           size: 750,
                           company: 'ENBIO')
    product.image_url = products(:PD2).image_url
    assert product.invalid?
    assert_equal ["must be a URL for GIF, JPG, PNG"], product.errors[:image_url]
  end

end

