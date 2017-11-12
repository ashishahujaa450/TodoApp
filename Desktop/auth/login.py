import urllib.request as rq
import urllib.parse as pr
import json as js


def check_status(data):
    url = "http://127.0.0.1:80/learning/TodoApp/website/api/req.php?type=login"

    par = pr.urlencode(data).encode("utf-8")

    url = rq.Request(url, par)

    res = rq.urlopen(url)

    res = res.read().decode("utf-8")

    obj = js.loads(res)

    if len(obj) == 0:
        input("invalid user press enter")
        exit()
    else:
        return obj


