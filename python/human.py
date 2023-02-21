from mahasiswa import mahasiswa

class human(mahasiswa):
    __nik = ""
    __nama2 = ""
    __jk2 = ""

    def __init__(self, nik="", nama2="", jk2=""):
        self.__nik = nik
        self.__nama2 = nama2
        self.__jk2 = jk2

    def setNik(self, nik):
        self.__nik = nik

    def getNik(self):
        return self.__nik

    def setNama2(self, nama2):
        self.__nama2 = nama2

    def getNama2(self):
        return self.__nama2

    def setJk2(self, jk2):
        self.__jk2 = jk2

    def getJk2(self):
        return self.__jk2
