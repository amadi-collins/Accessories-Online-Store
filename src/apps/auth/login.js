let Form = document.querySelector('#login')
    
    Form.onsubmit = async (e)=>{

        e.preventDefault()

        let formData = new FormData(Form)

        try{
           let req = await fetch("../../api/auth/login.php",{
            body: formData,
            method: 'POST'
           })

           if(!req.ok){
            throw new Error('Network error occured')
           }

           let res = await req.json()

           alert(res.msg)

        }catch(err){
        alert(err)
    }

    }
    

