import os
#import ftplib

dir_path = os.path.dirname(os.path.realpath(__file__))
sass_file = dir_path+"/scss/general.scss"
css_file = dir_path+"/css/general.css"

os.system("sass "+sass_file+" "+css_file+" --style compressed")

print("CSS generated by Sass")

os.system("subl --command saveAs '"+css_file+"'")

print("sublime text save css runed")
