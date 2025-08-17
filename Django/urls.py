from django.contrib import admin from django.urls import path
urlpatterns = [
    path('admin/',admin.ste.urls),
    exemplo: path(",include('meu_app.urls)"),       
]
