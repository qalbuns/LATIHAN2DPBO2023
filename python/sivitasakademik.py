from human import human


class sivitasakademik(human):
    __asaluniversitas = ""
    __emailedu = ""

    def __init__(self, asaluniversitas="", emailedu=""):
        self.__asaluniversitas = asaluniversitas
        self.__emailedu = emailedu

    def setAsal(self, asaluniversitas):
        self.__asaluniversitas = asaluniversitas

    def getAsal(self):
        return self.__asaluniversitas

    def setEmail(self, emailedu):
        self.__emailedu = emailedu

    def getEmail(self):
        return self.__emailedu
