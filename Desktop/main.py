def login():
    from auth import login

    email = input("enter email")
    passw = input("enter pass")

    data = {
        'pemail': email,
        'ppass': passw
    }

    login.check_status(data)


def reg():
    from auth import signup

    name = input("enter name")
    email = input("enter email")
    passw = input("enter password")
    mob = input("enter mobile")

    data = {
        'pname': name,
        'pemail': email,
        'ppass': passw,
        'pmob': mob
    }

    signup.register(data)


print("Enter choice\n1. login\n2. Register")
res = int(input())

if res == 1:
    login()
else:
    reg()


