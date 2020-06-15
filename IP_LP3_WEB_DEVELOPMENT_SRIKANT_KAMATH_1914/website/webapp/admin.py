from django.contrib import admin

from .models import Blogpost, Contact       # Importing our Created Models

# Registering Our Models Created
admin.site.register(Blogpost)

admin.site.register(Contact)