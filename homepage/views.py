from django.shortcuts import render
from django.http import HttpResponse





def home(request):
    return render(request,'homepage/homepage.html')


def login(request):
    return render(request, 'homepage/login.html')
