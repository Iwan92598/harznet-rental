Jika ingin ke hosting bagian ini :
--ubah bagian app/config/app.php
    public string $baseURL = 'http://localhost:8080/'; -> ini ketika localhost 
    public string $baseURL = 'https://rental.harznet.com/'; -> ini ketika di hosting
--ubah bagian .env 


    CI_ENVIRONMENT = 'production' -> ini ketika di production
    CI_ENVIRONMENT = 'development' -> ini ketika di dalam pengembangan


    app.baseURL = 'https://rental.harznet.com/' -> ini ketika di hosting
    app.baseURL = 'http://localhost:8080/'      -> ini ketika localhost