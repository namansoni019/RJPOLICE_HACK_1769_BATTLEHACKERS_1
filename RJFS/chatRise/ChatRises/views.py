from django.shortcuts import render, redirect,get_object_or_404
from django.contrib.auth import authenticate, login, logout
from django.contrib.auth.forms import UserCreationForm
from django.db import IntegrityError
from django.urls import reverse
from django.http import HttpResponse, HttpResponseRedirect,HttpResponseNotFound, JsonResponse , Http404
from .forms import RegisterForm
from django.contrib.auth.decorators import login_required
from ChatRises.models import Room, Message


def frontpage(request):
    # This is your front page view after login
    return render(request, 'ChatRises/frontpage.html')

# def login(request):
#     if request.method == "POST":

#         # Attempt to sign user in
#         username = request.POST["username"]
#         password = request.POST["password"]
#         user = authenticate(request, username=username, password=password)

#         # Check if authentication successful
#         if user is not None:
#             login(request, user)
#             return HttpResponseRedirect(reverse("frontpage"))
#         else:
#             return render(request, "Desivibe/login.html", {
#                 "message": "Invalid username and/or password."
#             })
#     else:
#         return render(request, "Desivibe/login.html")
    
# def logout_view(request):
#     logout(request)
#     return HttpResponseRedirect(reverse("frontpage"))

#  # Import your RegisterForm
def register(request):
    if request.method == 'POST':
        form = RegisterForm(request.POST)
        if form.is_valid():
            user = form.save()  # Save the user using the custom RegisterForm
            login(request, user)  # Log in the user after successful registration

            return redirect('frontpage')  # Redirect to your desired page after login (change 'frontpage' to your URL name)
    else:
        form = RegisterForm()
    
    return render(request, 'ChatRises/register.html', {'form': form})

@login_required
def rooms(request):
    rooms = Room.objects.all()

    return render(request, 'ChatRises/rooms.html', {'rooms': rooms})

def room(request, room):
    username = request.GET.get('username')
    room_details = Room.objects.get(name=room)
    return render(request, 'ChatRises/room.html', {
        'username': username,
        'room': room,
        'room_details': room_details
    })

def checkview(request):
    room = request.POST.get('room_name', '')
    username = request.POST.get('username', '')


    if Room.objects.filter(name=room).exists():
        return redirect(f'/'+room+'/?username={username}')
    else:
            
        new_room = Room.objects.create(name=room)
        new_room.save()
        return redirect(f'/'+room+'/?username={username}')
    
    
def send(request):
    message = request.POST['message']
    username = request.POST['username']
    room_id = request.POST['room_id']

    new_message = Message.objects.create(value=message, user=username, room=room_id)
    new_message.save()
    return HttpResponse('Message sent successfully')

def getMessages(request, room):
    room_details = Room.objects.get(name=room)

    messages = Message.objects.filter(room=room_details.id)
    return JsonResponse({"messages":list(messages.values())})