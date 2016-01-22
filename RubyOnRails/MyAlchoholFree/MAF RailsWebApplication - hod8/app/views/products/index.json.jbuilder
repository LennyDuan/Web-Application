json.array!(@products) do |product|
  json.extract! product, :id, :title, :description, :image_url, :price, :origin, :grape, :content, :size, :company
  json.url product_url(product, format: :json)
end
