from mahasiswa import mahasiswa
from human import human
from sivitasakademik import sivitasakademik

pelajar = sivitasakademik()

pelajar.setNim("1904335")
pelajar.setNama("Bubu")
pelajar.setJk("Perempuan")
pelajar.setFk("FPMIPA")
pelajar.setProdi("Ilmu Komputer")
pelajar.setNik("320429xxx")
pelajar.setNama2("Bubu")
pelajar.setJk2("Perempuan")
pelajar.setAsal("UPI")
pelajar.setEmail("bubuwashere@upi.edu")

pelajar2 = sivitasakademik()

pelajar2.setNim("1903453")
pelajar2.setNama("Piah")
pelajar2.setJk("Perempuan")
pelajar2.setFk("FIB")
pelajar2.setProdi("Sastra Inggris")
pelajar2.setNik("320497xxx")
pelajar2.setNama2("Piah")
pelajar2.setJk2("Perempuan")
pelajar2.setAsal("UNPAD")
pelajar2.setEmail("kuehpiah@unpad.edu")

print("-----------------------------------------------------")

print("Nim : " + str(pelajar.getNim()))
print("Nama : " + str(pelajar.getNama()))
print("Jenis Kelamin : " + str(pelajar.getJk()))
print("Fakultas : " + str(pelajar.getFk()))
print("Prodi : " + str(pelajar.getProdi()))
print("Nik : " + str(pelajar.getNik()))
print("Nama : " + str(pelajar.getNama2()))
print("Jenis Kelamin : " + str(pelajar.getJk2()))
print("Asal Universitas : " + str(pelajar.getAsal()))
print("Email Edu : " + str(pelajar.getEmail()))

print("-----------------------------------------------------")

print("Nim : " + str(pelajar2.getNim()))
print("Nama : " + str(pelajar2.getNama()))
print("Jenis Kelamin : " + str(pelajar2.getJk()))
print("Fakultas : " + str(pelajar2.getFk()))
print("Prodi : " + str(pelajar2.getProdi()))
print("Nik : " + str(pelajar2.getNik()))
print("Nama : " + str(pelajar2.getNama2()))
print("Jenis Kelamin : " + str(pelajar2.getJk2()))
print("Asal Universitas : " + str(pelajar2.getAsal()))
print("Email Edu : " + str(pelajar2.getEmail()))

print("-----------------------------------------------------")
