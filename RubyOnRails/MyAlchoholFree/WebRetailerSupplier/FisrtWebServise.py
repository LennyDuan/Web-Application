import web
import urllib2

urls = ("/wines", "index",
  "/order", "order")

app = web.application(urls,globals())
class index:
 def GET(self):
  with open('wine_data.json', 'r') as f:
   data = f.read()
   return data

class order:
 def POST(self):
  try:
   i = web.input()
   data = web.data()
   with open('order_data.json', 'r') as f:
    all_data = f.read() + '\n' +data
   with open('order_data.json', 'w') as f:
    f.write(all_data)
   print data
  except Error(e):
   print e
   
 def GET(self):
  with open('order_data.json', 'r') as f:
   data = f.read()
   return data

if __name__ == "__main__":
 app.run()




