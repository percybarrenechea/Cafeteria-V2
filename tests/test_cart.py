import pytest
from src.cart import Cart, Product

def test_add_product_to_cart():
    cart = Cart()
    product = Product(name="Café", price=10.0)

    cart.add_product(product, quantity=2)

    assert len(cart.products) == 1
    assert cart.products[product]['quantity'] == 2

def test_modify_product_quantity():
    cart = Cart()
    product = Product(name="Café", price=10.0)

    cart.add_product(product, quantity=2)
    cart.modify_product_quantity(product, quantity=5)

    assert cart.products[product]['quantity'] == 5

def test_remove_product_from_cart():
    cart = Cart()
    product = Product(name="Café", price=10.0)

    cart.add_product(product, quantity=2)
    cart.remove_product(product)

    assert len(cart.products) == 0
