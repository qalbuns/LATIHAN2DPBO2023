class mahasiswa:
    __nim = ""
    __nama = ""
    __jk = ""
    __fk = ""
    __prodi = ""

    def __init__(self, nim="", nama="", jk="", fk="", prodi=""):
        self.__nim = nim
        self.__nama = nama
        self.__jk = jk
        self.__fk = fk
        self.__prodi = prodi

    def setNim(self, nim):
        self.__nim = nim

    def getNim(self):
        return self.__nim

    def setNama(self, nama):
        self.__nama = nama

    def getNama(self):
        return self.__nama

    def setJk(self, jk):
        self.__jk = jk

    def getJk(self):
        return self.__jk

    def setFk(self, fk):
        self.__fk = fk

    def getFk(self):
        return self.__fk

    def setProdi(self, prodi):
        self.__prodi = prodi

    def getProdi(self):
        return self.__prodi
