import urllib.request as rq
import urllib.parse as pr
import json as js


def profile(data,url):
    prof = data[0]

    print("Welcome ", prof['name'])

    print("Enter choice\n1. Add reminder\n2. List Reminders")
    res = int(input())

    if res == 1:
        add_rem(prof['id'],url)
    else:
        list_rem(prof['id'],url)


def add_rem(id,url):
    title = input("enter title")
    descp = input("enter desc")
    prio = int(input("enter priority 1. Highest 2. Medium 3. Lowest"))

    url += "addrem"

    data = {
        "id": id,
        "title": title,
        "desc": descp,
        "pri": prio
    }

    par = pr.urlencode(data).encode("utf-8")

    url = rq.Request(url, par)

    res = rq.urlopen(url)

    res = res.read().decode("utf-8")

    if res == "1":
        print("added")
    else:
        print("try again")


def list_rem(id,url):
    url += "list"

    data = {
        "id": id,
    }

    par = pr.urlencode(data).encode("utf-8")

    url = rq.Request(url, par)

    res = rq.urlopen(url)

    res = res.read().decode("utf-8")

    obj = js.loads(res)

    counter = 1

    for data in obj:
        pri = ""

        if data['prio'] == "1":
            pri = "Highest"
        elif data['prio'] == "2":
            pri = "Medium"
        else:
            pri = "Lowest"

        print("Id: ", counter, " Title: ", data['title'], " Desc: ", data['descp'], " Prio: ", pri)
        counter += 1

