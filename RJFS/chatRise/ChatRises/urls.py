from django.contrib.auth import views as auth_views
from django.urls import path

from . import views

urlpatterns = [
    path('', views.frontpage, name='frontpage'),
    path('register/', views.register, name='register'),
    path('login/', auth_views.LoginView.as_view(template_name='ChatRises/login.html'), name='login'),
    path('logout/', auth_views.LogoutView.as_view(), name='logout'),
    path('rooms/', views.rooms, name='rooms'),
    path('<str:room>/', views.room, name='room'),
    path('rooms/checkview', views.checkview, name='checkview'),
    path('send', views.send, name='send'),
    path('getMessages/<str:room>/', views.getMessages, name='getMessages'),
]
