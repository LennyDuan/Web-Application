# This file should contain all the record creation needed to seed the database with its default values.
# The data can then be loaded with the rake db:seed (or created alongside the db with db:setup).
#
# Examples:
#
#   cities = City.create([{ name: 'Chicago' }, { name: 'Copenhagen' }])
#   Mayor.create(name: 'Emanuel', city: cities.first)

LineItem.delete_all
Cart.delete_all
Product.delete_all

Product.create!(title: 'Blutul Red Wine',
               description:
                %{Blutul alcohol free red wine has an intense aroma of ripe berries with notes of dried fruits and bright tones of red currant in the aftertaste. It is all-natural being made of the top quality wine grape must and grape-sugar. Alcohol free wine tastes different ranging from dry to semi-sweet in various temperature conditions, which is why it is perfect for the main course or salads as well as for desserts and light cakes. As Blutul alcohol free wines are suitable for vegetarian, diabetic, sport and other diets. Blutul alcohol free red wine has positive effect for the blood vascular system without harmful impact on heart as it includes no alcohol.},
                image_url: 'Blutul.jpg',
                price: 9.75,
                origin: 'Germany',
                grape: 'Acolon',
                content: 0.02,
                size: 750,
                company: 'ENBIO')
#. . .

Product.create!(title: 'Eisberg Red Wine',
                description:
                %{A rich non-alcoholic red wine with a deep ruby colour and aromas of cherries and plums.
                },
                image_url: 'Eisberg.jpg',
                price: 11.86,
                origin: 'Germany',
                grape: 'Acolon',
                content: 0.01,
                size: 700,
                company: 'Eisberg')
#. . .

Product.create!(title: 'Eisberg Rose Wine',
                description:
                %{
                deGifts2Drink has been handcrafting luxury alcoholic gifts since the year 2000 and it is this experience and knowledge that sets us apart. Every care is taken by our team of experienced gift makers, and each component that goes into a gift is carefully hand-picked and packed with ultimate attention to detail. },
                  image_url: 'Rose.jpg',
                  price: 10.89,
                  origin: 'Italy',
                  grape: 'Cecubo',
                  content: 0.5,
                  size: 700,
                  company: 'Eisberg')
#. . .

Product.create!(title: 'Echo Falls',
                description:
                %{A sophisticated alternative to traditional sparkling wine, sparkling Tisane is a finely balanced combination of sparkling grape juice and premium green tea infusion. Best served very chilled, in a champagne flute! Dave Pahl, the creator of Sparkling Tisane. },
                image_url: 'Echo.jpg',
                price: 13.15,
                origin: 'USA',
                grape: 'Limburger',
                content: 0.05,
                size: 750,
                company: 'Accolade')
#. . .

Product.create!(title: 'Three Mills English Red Wine',
                description:
                %{Our British-Made Wine range consists of Red, White and Rose. They are easy-drinking style wines and benefit from lower alcohol levels of between 8-11% ABV and is also suitable for Vegetarians.The Three Mills brand has been one of the most successful British-Made wines to hit the market since 2009, with over 2 million units sold in 2011 and we are on track to more than double this in 2013. Developed to meet the growing consumer demand for lighter alcohol wines.In 2011, on the back of this success, we launched Three Mills Reserve. Expertly created in partnership with a Master of Wine, this 11% light wine style has followed the success of the Three Mills 8% line at launch and is continuing to be a hit with consumers nationally.},
                image_url: 'Three.jpg',
                price: 20.05,
                origin: 'England',
                grape: 'Reichensteiner',
                content: 8.00,
                size: 750,
                company: 'Three Mills')
#. . .
