window.addEventListener('load', () => {

    let form = document.getElementById('form')
    let email = document.getElementById('email')
    let password = document.getElementById('password')
    let alert = document.getElementById('alert')

    const sendData = () => {
        let data = new FormData()

        data.append("email", email.value)
        data.append("password", password.value)

        fetch('http://localhost/login/php/logueo.php', {
            method: 'POST',
            body: data
        })
        .then(Response => Response.json())
        .then(({success}) => {
            if(success === 1) {
                location.href = 'home.php'
            } else {
                errorAlert()
            }
        })
        .catch(err => {
            console.log(err)
        })
    }

    const errorAlert = () => {
        alert.innerHTML = '<p>email or password invalid</p>'
    }
  
    form.addEventListener('submit', e => {
        e.preventDefault()

        sendData()
    })
})

