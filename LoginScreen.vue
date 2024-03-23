<template>
  <div class="row">
    <div class="col-md-6"></div>
  </div>
  <div class="login-container">
    <form @submit.prevent="login">
      <h2>Giriş</h2>
      <input type="text" name="user" placeholder="Kullanıcı" autocomplete="false">
      <input type="password" name="sifre" placeholder="Parola">
      <input type="submit" value="Giris Yap" id="girisBtn">
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      username: "",
      password: ""
    };
  },
  methods: {
    async login() {
      // Burada login işlemini gerçekleştirin (örneğin API çağrısı yapın)
      console.log("Kullanıcı adı:", this.username);
      console.log("Şifre:", this.password);
      // Giriş başarılıysa sayfa yönlendirmesi yapabilirsiniz
    }
  }
};
</script>

<style scoped>
.login-container {
max-width: 300px;
margin: 0 auto;
}

*{
  margin: 0;
  padding: 0;
  font-family: Arial, Helvetica, sans-serif;
}

body{
  background: #262626 url(https://c4.wallpaperflare.com/wallpaper/707/220/899/gradient-blue-pink-abstract-art-wallpaper-preview.jpg);
  background-size: cover;
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;

}
form{
  background: #42424279;
  padding: 20px;
  display: inline-flex;
  flex-direction: column;
  align-items: center;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, .8);
  width: 300px;
  height: 400px;

}
form h2{
  margin-top: 20px;
  font-size: 55px;
  color: white;
  margin-bottom: 30px;
}
form input{
  border: none;
  background: none;
  text-align: center;
  outline: none;
  padding: 10px;
  margin: 20px;
  color: white; 
  height: 30px;
  width: 70%;
  border-radius: 40px;
  transition: 0.2s ease-in;
}
form input[type="text"], form input[type="password"]{
  border:solid 2px #1b9cfc ;

}
form input[type="submit"]{
  border: solid 2px #5556c1;
  box-sizing: border-box;
  height: 50px;
  width: 40%;
  cursor: pointer;
}

form input[type="text"]:focus, form input[type="password"]:focus{
  width: 80%;
  border: solid 2px #5556c1;

}
form input[type="submit"]:hover{
  background: #5556c1;
}
</style>