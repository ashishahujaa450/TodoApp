url = "http://127.0.0.1:80"

def login():
    from auth import login

    email = input("enter email")
    passw = input("enter pass")

    data = {
        'pemail': email,
        'ppass': passw
    }

    res = login.check_status(data,url)

    from api import callfun

    callfun.profile(res,url)


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

    signup.register(data,url)


def main():
    global url

    with open("path.txt","r") as rf:
        url += rf.readline()

        url += "/api/req.php?type="

    print("Enter choice\n1. login\n2. Register")
    res = int(input())

    if res == 1:
        login()
    else:
        reg()

if __name__ == '__main__':
    main()




