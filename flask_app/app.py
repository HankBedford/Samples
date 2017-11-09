#importing flask modules, MySQL database, and Form

from flask import Flask, render_template, flash, url_for, redirect, session, logging, request
from flask_mysqldb import MySQL
from wtforms import Form, StringField, TextAreaField, PasswordField, validators

app = Flask(__name__)


@app.route('/')

def index():
    return render_template('admin_page.html')




if __name__=='__main__':
    app.run(debug=True)