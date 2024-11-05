class Product:
    def __init__(self, name, price):
        self.name = name
        self.price = price

class Cart:
    def __init__(self):
        self.products = {}

    def add_product(self, product, quantity):
        if product in self.products:
            self.products[product]['quantity'] += quantity
        else:
            self.products[product] = {'quantity': quantity}

    def modify_product_quantity(self, product, quantity):
        if product in self.products:
            self.products[product]['quantity'] = quantity

    def remove_product(self, product):
        if product in self.products:
            del self.products[product]
