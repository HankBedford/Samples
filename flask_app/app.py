# Just playing around with flask

# Importing Flack modules, as well as my own data module
from flask import Flask, render_template, flash, redirect, url_for, session, logging, request
# added MySQL to macbook, and added Flask module to interact with it
from flask_mysqldb import MySQL
from wtforms import Form, StringField, TextAreaField, PasswordField, validators
from passlib.hash import sha256_crypt

# always needed
app = Flask(__name__)

# call function Articles in data.py

# route home screen (basically so the browser has an address to read I think
class RegisterForm(Form):
    username = StringField('Username', [validators.Length(min=4, max=25)])
    password = PasswordField('Password', [validators.DataRequired(), validators.EqualTo('confirm', message='Passwords do match')])


@app.route('/')

# call the html file
def index():
    form = RegisterForm(request.form)

    if request.method == 'POST' and form.validate():
        return render_template('admin_page.html')
    return render_template('admin_page.html', form=form)

@app.route('/restaurant_one')

def restaurant_one():

    return render_template('restaurant_one.html')

@app.route('/menu')

def menu():

    return render_template('menu.html')


if __name__ =='__main__':
    app.run(debug=True)