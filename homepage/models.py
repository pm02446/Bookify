from django.db import models
from django.utils import timezone
#from django.contrib.auth.models import User


class Book(models.Model):
    title = models.CharField(max_length=100)
    description = models.TextField()
    date_added = models.DateTimeField(default=timezone.now)
    author = models.CharField(max_length=60)


    #this is so when we do querys we can see the titles

    def __str__(self):
        return self.title

    # this will be used for if the user was posting stuff, not needed for this project
    # if user is deleted then all their post will be deleted
    # author = models.ForeignKey(User, on_delete=models.CASCADE)
