<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Untuk posts nya berdasarkan kategori ke-1
        Post::create([
            'title' => 'Apa itu Algoritma ?',
            'author_id' => 7,
            'category_id' => 1,
            'slug' => 'algoritma',
            'body' => 'Algoritma adalah urutan langkah-langkah yang disusun secara logis dan sistematis untuk menyelesaikan masalah dan menghasilkan output tertentu. Dalam dunia komputer, algoritma merupakan langkah pemecahan masalah yang dibuat berdasarkan logika dan perhitungan matematis. Contohnya adalah algoritma untuk membuat teh, algoritma untuk membuat kopi, dan algoritma untuk membuat mie instan.',
            'code' => '# tidak ada kode'
        ]);

        Post::create([
            'title' => 'Apa itu Pemrograman ?',
            'author_id' => 6,
            'category_id' => 1,
            'slug' => 'pemrograman',
            'body' => 'Pemrograman adalah suatu cara dalam membuat satu atau menghubungkan lebih dari satu algoritma dengan menggunakan suatu bahasa pemrograman tertentu sehingga menjadi suatu program komputer. Ada banyak bahasa pemrograman yang dapat digunakan seperti bahasa C, C++, Java, Phyton, dan lain-lain. Setiap bahasa memiliki gaya yang berbeda-beda dalam penggunaannya sehingga memiliki gaya pemrograman yang berbeda pula. Gaya pemrograman ini biasa disebut dengan paradigma pemrograman. Orang yang pandai atau yang menggunakan bahasa pemrograman sering disebut seorang Pemrogram atau Programmer.',
            'code' => 'print("Hello World!")'
        ]);

        Post::create([
            'title' => 'Apa itu Algoritma Pemrograman ?',
            'author_id' => 5,
            'category_id' => 1,
            'slug' => 'algoritma-pemrograman',
            'body' => 'Algoritma pemrograman adalah seni dan ilmu dalam menyusun langkah-langkah terstruktur untuk membentuk suatu program. Inilah fondasi yang mendasari semua aktivitas dalam dunia pemrograman. Jika Anda bercita-cita menjadi seorang programmer, memahami algoritma adalah langkah pertama yang harus Anda ambil.',
            'code' => '# tidak ada kode'
        ]);

        Post::create([
            'title' => 'Apa itu Python ?',
            'author_id' => 4,
            'category_id' => 1,
            'slug' => 'python',
            'body' => 'Python adalah bahasa pemrograman tujuan umum yang ditafsirkan, tingkat tinggi. Dibuat oleh Guido van Rossum dan pertama kali dirilis pada tahun 1991, filosofi desain Python menekankan keterbacaan kode dengan penggunaan spasi putih yang signifikan. Konstruksi bahasanya dan pendekatan berorientasi objek bertujuan untuk membantu pemrogram menulis kode yang jelas dan logis untuk proyek skala kecil dan besar. Python diketik secara dinamis dan pengumpulan sampah. Ini mendukung beberapa paradigma pemrograman, termasuk pemrograman terstruktur (terutama, prosedural), berorientasi objek, dan fungsional. Python sering dideskripsikan sebagai bahasa (termasuk baterai) karena perpustakaan standarnya yang komprehensif.',
            'code' => 'print("Hello World!")'
        ]);

        Post::create([
            'title' => 'Variabel di Python',
            'author_id' => 3,
            'category_id' => 1,
            'slug' => 'variabel-python',
            'body' => 'Variabel adalah lokasi memori yang dicadangkan untuk menyimpan nilai-nilai. Ini berarti bahwa ketika Anda membuat sebuah variabel Anda memesan beberapa ruang di memori. Variabel menyimpan data yang dilakukan selama program dieksekusi, yang nantinya isi dari variabel tersebut dapat diubah oleh operasi - operasi tertentu pada program yang menggunakan variabel.',
            'code' => 'namaDepan = John Doe\numur = 20\nprint(namaDepan)\nprint(umur)'
        ]);

        Post::create([
            'title' => 'Tipe Data di Python',
            'author_id' => 2,
            'category_id' => 1,
            'slug' => 'tipe-data-python',
            'body' => 'Tipe data adalah klasifikasi data yang diberikan ke variabel sesuai dengan jenis data yang akan disimpan. Python memiliki berbagai tipe data yang didukung, beberapa di antaranya adalah: \n 1. Tipe data Text: str \n 2. Tipe data Numeric: int, float, complex \n 3. Tipe data Sequence: list, tuple, range \n 4. Tipe data Mapping: dict \n 5. Tipe data Set: set, frozenset \n 6. Tipe data Boolean: bool \n 7. Tipe data Binary: bytes, bytearray, memoryview',
            'code' => 'print(type(5))\nprint(type(5.0))\nprint(type(5+3j))'
        ]);

        Post::create([
            'title' => 'Operator di Python',
            'author_id' => 1,
            'category_id' => 1,
            'slug' => 'operator-python',
            'body' => 'Operator adalah simbol yang digunakan untuk melakukan operasi pada variabel dan nilai. Python mendukung berbagai jenis operator, beberapa di antaranya adalah: \n 1. Operator Aritmatika: +, -, *, /, %, **, // \n 2. Operator Perbandingan: ==, !=, >, <, >=, <= \n 3. Operator Logika: and, or, not \n 4. Operator Penugasan: =, +=, -=, *=, /=, %=, **=, //= \n 5. Operator Bitwise: &, |, ^, ~, <<, >>',
            'code' => 'x = 5 \n y = 3 \n print(x + y) \n print(x - y) \n print(x * y) \n print(x / y) \n print(x % y) \n print(x ** y) \n print(x // y)'
        ]);

        // tutup posts berdasarkan kategori ke-1

        // Untuk posts nya berdasarkan kategori ke-2
        Post::create([
            'title' => 'Pengulangan di Python',
            'author_id' => 1,
            'category_id' => 2,
            'slug' => 'pengulangan-python',
            'body' => 'Pengulangan adalah proses yang dilakukan untuk mengeksekusi satu atau lebih pernyataan beberapa kali. Python mendukung dua jenis pengulangan, yaitu: \n 1. Pengulangan dengan for \n 2. Pengulangan dengan while',
            'code' => 'for i in range(5): \n print(i) \n \n i = 0 \n while i < 5: \n print(i) \n i += 1'
        ]);

        Post::create([
            'title' => 'Percabangan di Python',
            'author_id' => 2,
            'category_id' => 2,
            'slug' => 'percabangan-python',
            'body' => 'Percabangan adalah proses yang dilakukan untuk memilih satu atau lebih pernyataan yang akan dieksekusi berdasarkan kondisi tertentu. Python mendukung dua jenis percabangan, yaitu: \n 1. Percabangan if \n 2. Percabangan if-else',
            'code' => 'x = 5 \n if x > 0: \n print("Bilangan positif") \n \n x = -5 \n if x > 0: \n print("Bilangan positif") \n else: \n print("Bilangan negatif")'
        ]);

        Post::create([
            'title' => 'Nested di Python',
            'author_id' => 3,
            'category_id' => 2,
            'slug' => 'nested-python',
            'body' => 'Nested adalah proses yang dilakukan untuk menempatkan satu atau lebih pernyataan di dalam pernyataan lain. Python mendukung nested, yang memiliki sintaksis berikut: \n if condition: \n if condition: \n statement(s)',
            'code' => 'x = 5 \n if x > 0: \n print("Bilangan positif") \n if x % 2 == 0: \n print("Bilangan genap")'
        ]);

        Post::create([
            'title' => 'While di Python',
            'author_id' => 4,
            'category_id' => 2,
            'slug' => 'while-python',
            'body' => 'While adalah jenis pengulangan yang digunakan untuk mengeksekusi satu atau lebih pernyataan selama kondisi tertentu benar. Python mendukung pengulangan while, yang memiliki sintaksis berikut: \n while condition: \n statement(s)',
            'code' => 'i = 1 \n while i < 6: \n print(i) \n i += 1'
        ]);

        Post::create([
            'title' => 'For di Python',
            'author_id' => 5,
            'category_id' => 2,
            'slug' => 'for-python',
            'body' => 'For adalah jenis pengulangan yang digunakan untuk mengeksekusi satu atau lebih pernyataan untuk setiap item dalam urutan tertentu. Python mendukung pengulangan for, yang memiliki sintaksis berikut: \n for item in sequence: \n statement(s)',
            'code' => 'fruits = ["apple", "banana", "cherry"] \n for x in fruits: \n print(x)'
        ]);

        Post::create([
            'title' => 'If Elif Else di Python',
            'author_id' => 6,
            'category_id' => 2,
            'slug' => 'if-elif-else-python',
            'body' => 'If Elif Else adalah jenis percabangan yang digunakan untuk memilih satu atau lebih pernyataan yang akan dieksekusi berdasarkan kondisi tertentu. Python mendukung percabangan if elif else, yang memiliki sintaksis berikut: \n if condition1: \n statement(s) \n elif condition2: \n statement(s) \n else: \n statement(s)',
            'code' => 'a = 33 \n b = 33 \n if b > a: \n print("b is greater than a") \n elif a == b: \n print("a and b are equal") \n else: \n print("a is greater than b")'
        ]);

        Post::create([
            'title' => 'Break Continue di Python',
            'author_id' => 7,
            'category_id' => 2,
            'slug' => 'break-continue-python',
            'body' => 'Break Continue adalah pernyataan yang digunakan untuk menghentikan eksekusi pengulangan atau melanjutkan ke iterasi berikutnya. Python mendukung pernyataan break dan continue, yang memiliki sintaksis berikut: \n break: digunakan untuk menghentikan eksekusi pengulangan \n continue: digunakan untuk melanjutkan ke iterasi berikutnya',
            'code' => 'i = 0 \n while i < 6: \n i += 1 \n if i == 3: \n continue \n print(i)'
        ]);
        
        // tutup posts berdasarkan kategori ke-2
        
        // Untuk posts nya berdasarkan kategori ke-3
        Post::create([
            'title' => 'Function di Python',
            'author_id' => 6,
            'category_id' => 3,
            'slug' => 'function-python',
            'body' => 'Function adalah blok kode yang digunakan untuk melakukan tugas tertentu. Function dapat menerima argumen sebagai input dan mengembalikan nilai sebagai output. Python mendukung beberapa function bawaan yang dapat digunakan, seperti: \n 1. print() \n 2. input() \n 3. len() \n 4. range() \n 5. sum() \n 6. max() \n 7. min()',
            'code' => 'def my_function(): \n print("Hello from a function") \n \n my_function()'
        ]);

        Post::create([
            'title' => 'Parameter di Python',
            'author_id' => 7,
            'category_id' => 3,
            'slug' => 'parameter-python',
            'body' => 'Parameter adalah variabel yang digunakan dalam deklarasi function. Parameter digunakan untuk menerima input dari luar function. Python mendukung beberapa jenis parameter, seperti: \n 1. Parameter posisi \n 2. Parameter kata kunci \n 3. Parameter default \n 4. Parameter variabel panjang',
            'code' => 'def my_function(fname): \n print(fname + " Refsnes") \n \n my_function("Emil") \n my_function("Tobias") \n my_function("Linus")'
        ]);

        Post::create([
            'title' => 'Return di Python',
            'author_id' => 1,
            'category_id' => 3,
            'slug' => 'return-python',
            'body' => 'Return adalah pernyataan yang digunakan untuk mengembalikan nilai dari function. Python mendukung pernyataan return, yang memiliki sintaksis berikut: \n def my_function(): \n return value',
            'code' => 'def my_function(x): \n return 5 * x \n \n print(my_function(3)) \n print(my_function(5)) \n print(my_function(9))'
        ]);

        Post::create([
            'title' => 'Lambda di Python',
            'author_id' => 2,
            'category_id' => 3,
            'slug' => 'lambda-python',
            'body' => 'Lambda adalah fungsi anonim yang didefinisikan tanpa nama. Lambda digunakan untuk membuat fungsi sederhana dalam satu baris kode. Python mendukung lambda, yang memiliki sintaksis berikut: \n lambda arguments: expression',
            'code' => 'x = lambda a : a + 10 \n print(x(5))'
        ]);

        Post::create([
            'title' => 'Global Local di Python',
            'author_id' => 3,
            'category_id' => 3,
            'slug' => 'global-local-python',
            'body' => 'Global Local adalah ruang lingkup variabel yang digunakan dalam program. Python mendukung global dan local, yang memiliki sintaksis berikut: \n 1. Global: variabel yang dideklarasikan di luar function \n 2. Local: variabel yang dideklarasikan di dalam function',
            'code' => 'x = 300 \n \n def my_function(): \n x = 200 \n print(x) \n \n my_function() \n print(x)'
        ]);

        Post::create([
            'title' => 'Module di Python',
            'author_id' => 4,
            'category_id' => 3,
            'slug' => 'module-python',
            'body' => 'Module adalah file yang berisi kode Python. Module dapat mendefinisikan fungsi, kelas, dan variabel. Python mendukung module, yang memiliki sintaksis berikut: \n import module_name',
            'code' => 'import mymodule \n mymodule.greeting("Jonathan")'
        ]);
        // tutup posts berdasarkan kategori ke-3

        // Untuk posts nya berdasarkan kategori ke-4
        Post::create([
            'title' => 'List di Python',
            'author_id' => 2,
            'category_id' => 4,
            'slug' => 'list-python',
            'body' => 'List adalah jenis tipe data yang digunakan untuk menyimpan beberapa item dalam satu variabel. List adalah jenis tipe data yang dapat diubah, artinya Anda dapat mengubah, menambahkan, dan menghapus item dalam list. Python mendukung beberapa operasi pada list, seperti: \n 1. Menambahkan item: append(), insert() \n 2. Menghapus item: remove(), pop() \n 3. Menggabungkan list: extend(), + \n 4. Mengurutkan list: sort() \n 5. Membalik list: reverse()',
            'code' => 'fruits = ["apple", "banana", "cherry"] \n print(fruits) \n print(fruits[1])'
        ]);

        Post::create([
            'title' => 'Tuple di Python',
            'author_id' => 3,
            'category_id' => 4,
            'slug' => 'tuple-python',
            'body' => 'Tuple adalah jenis tipe data yang digunakan untuk menyimpan beberapa item dalam satu variabel. Tuple adalah jenis tipe data yang tidak dapat diubah, artinya Anda tidak dapat menambahkan, mengubah, atau menghapus item dalam tuple. Python mendukung beberapa operasi pada tuple, seperti: \n 1. Mengakses item: [] \n 2. Menggabungkan tuple: + \n 3. Mengulang tuple: *',
            'code' => 'fruits = ("apple", "banana", "cherry") \n print(fruits) \n print(fruits[1])'
        ]);
        
        Post::create([
            'title' => 'Set di Python',
            'author_id' => 4,
            'category_id' => 4,
            'slug' => 'set-python',
            'body' => 'Set adalah jenis tipe data yang digunakan untuk menyimpan beberapa item dalam satu variabel. Set adalah jenis tipe data yang tidak memiliki indeks, artinya Anda tidak dapat mengakses item dalam set berdasarkan indeks. Python mendukung beberapa operasi pada set, seperti: \n 1. Menambahkan item: add() \n 2. Menghapus item: remove(), discard() \n 3. Menggabungkan set: union(), update() \n 4. Mengurutkan set: sorted()',
            'code' => 'fruits = {"apple", "banana", "cherry"} \n print(fruits)'
        ]);

        Post::create([
            'title' => 'Dictionary di Python',
            'author_id' => 5,
            'category_id' => 4,
            'slug' => 'dictionary-python',
            'body' => 'Dictionary adalah jenis tipe data yang digunakan untuk menyimpan pasangan kunci-nilai. Dictionary adalah jenis tipe data yang dapat diubah, artinya Anda dapat menambahkan, mengubah, atau menghapus item dalam dictionary. Python mendukung beberapa operasi pada dictionary, seperti: \n 1. Mengakses item: [] \n 2. Menambahkan item: [] = \n 3. Menghapus item: pop(), popitem(), del \n 4. Menggabungkan dictionary: update()',
            'code' => 'fruits = {"apple": 2, "banana": 3, "cherry": 5} \n print(fruits) \n print(fruits["banana"])'
        ]);

        // tutup posts berdasarkan kategori ke-4

        // Untuk posts nya berdasarkan kategori ke-5
        Post::create([
            'title' => 'Class di Python',
            'author_id' => 3,
            'category_id' => 5,
            'slug' => 'class-python',
            'body' => 'Class adalah blueprint untuk objek. Class mendefinisikan atribut untuk menyimpan data dan metode untuk mengelola data. Python mendukung class, yang memiliki sintaksis berikut: \n class ClassName: \n def __init__(self, parameter): \n self.parameter = parameter \n def method(self): \n return self.parameter',
            'code' => 'class MyClass: \n x = 5 \n \n p1 = MyClass() \n print(p1.x)'
        ]);
        
        Post::create([
            'title' => 'Object di Python',
            'author_id' => 4,
            'category_id' => 5,
            'slug' => 'object-python',
            'body' => 'Object adalah instance dari class. Object adalah objek yang dibuat berdasarkan class. Python mendukung object, yang memiliki sintaksis berikut: \n class ClassName: \n def __init__(self, parameter): \n self.parameter = parameter \n def method(self): \n return self.parameter \n \n object = ClassName(parameter)',
            'code' => 'class MyClass: \n x = 5 \n \n p1 = MyClass() \n print(p1.x)'
        ]);

        Post::create([
            'title' => 'Inheritance di Python',
            'author_id' => 5,
            'category_id' => 5,
            'slug' => 'inheritance-python',
            'body' => 'Inheritance adalah proses dimana class dapat mewarisi atribut dan metode dari class lain. Class yang mewarisi atribut dan metode disebut subclass, sedangkan class yang memberikan atribut dan metode disebut superclass. Python mendukung inheritance, yang memiliki sintaksis berikut: \n class ClassName(SuperClassName): \n def __init__(self, parameter): \n SuperClassName.__init__(self, parameter)',
            'code' => 'class Person: \n def __init__(self, fname, lname): \n self.firstname = fname \n self.lastname = lname \n \n def printname(self): \n print(self.firstname, self.lastname) \n \n class Student(Person): \n pass'
        ]);

        Post::create([
            'title' => 'Polymorphism di Python',
            'author_id' => 6,
            'category_id' => 5,
            'slug' => 'polymorphism-python',
            'body' => 'Polymorphism adalah konsep dimana class dapat memiliki banyak bentuk. Polymorphism memungkinkan class untuk menggunakan nama yang sama untuk metode yang berbeda. Python mendukung polymorphism, yang memiliki sintaksis berikut: \n class ClassName: \n def method(self): \n return value',
            'code' => 'class Dog: \n def sound(self): \n print("Bark") \n \n class Cat: \n def sound(self): \n print("Meow") \n \n def make_sound(animal): \n animal.sound() \n \n dog = Dog() \n cat = Cat() \n \n make_sound(dog) \n make_sound(cat)'
        ]);

        Post::create([
            'title' => 'Encapsulation di Python',
            'author_id' => 7,
            'category_id' => 5,
            'slug' => 'encapsulation-python',
            'body' => 'Encapsulation adalah konsep dimana atribut dan metode dalam class disembunyikan dari class lain. Encapsulation memungkinkan class untuk memiliki kontrol atas atribut dan metode yang dimilikinya. Python mendukung encapsulation, yang memiliki sintaksis berikut: \n class ClassName: \n def __init__(self, parameter): \n self.__parameter = parameter',
            'code' => 'class Person: \n def __init__(self, name, age): \n self.__name = name \n self.__age = age \n \n def get_name(self): \n return self.__name \n \n def get_age(self): \n return self.__age'
        ]);

        // tutup posts berdasarkan kategori ke-5
    }   

}