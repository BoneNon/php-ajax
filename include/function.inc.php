<?php

    define('DB_SERVER','localhost');
    define('DB_USER','root');
    define('DB_PASS','12345678');
    define('DB_NAME','book');

    class DB_con {

        function __construct() {
            $conn =mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            $this->dbcon = $conn;

            if (mysqli_connect_errno()) {
                echo "Failed to connect to Mysql : " . mysqli_connect_error();
            }
        }

        public function insert($book_code, $book_name, $book_category, $book_price ) {
            $result = mysqli_query($this->dbcon, "INSERT INTO book(book_code, book_name, book_category, book_price) VALUES('$book_code', '$book_name', '$book_category', '$book_price')");
            return $result;
        }

        public function fetchdata_book() {
            $result = mysqli_query($this->dbcon, "SELECT * FROM book");
            return $result;
        }
        
        public function fetchdata_slip() {
            $result = mysqli_query($this->dbcon, "SELECT * FROM slip");
            return $result;
        }

        public function fetchonrecord($code) {
            $result = mysqli_query($this->dbcon, "SELECT * FROM book WHERE book_code = '$code'");
            return $result;
        }

        public function fetchdata_sell($code) {
            $result = mysqli_query($this->dbcon, "SELECT * FROM sell WHERE sell_id = '$code'");
            return $result;
        }

        public function fetchdata_view($code2) {
            $result = mysqli_query($this->dbcon, "SELECT * FROM book WHERE book_code = '$code2'");
            return $result;
        }

        public function update($book_code, $book_name, $book_category, $book_price ) {
            $result = mysqli_query($this->dbcon, "UPDATE book SET
                book_code = '$book_code',
                book_name = '$book_name',
                book_category = '$book_category',
                book_price = '$book_price'
                WHERE book_code = '$book_code'
            ");
            return $result;
        }

        public function delete($book_code) {
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM book WHERE book_code = '$book_code'");
            return $deleterecord;
        }

    }

?>