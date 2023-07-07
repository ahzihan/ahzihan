<section class="bg-light py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
                <div class="text-center my-5">
                    <div id="about-data">

                    </div>

                    <div id="social-link" class="d-flex justify-content-center fs-2 gap-4">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    GetAboutData();
    async function GetAboutData(){
        let URL="/aboutData";

        try {
            const response = await axios.get(URL);

            document.getElementById("about-data").innerHTML=(`
                    <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
                    <p class="lead fw-light mb-4">${response.data['title']}</p>
                    <p class="text-muted">${response.data['description']}</p>
                `);
        } catch (error){
            alert(error);
        }

    }

    GetSocialLink();
    async function GetSocialLink(){
        let URL="/socialData";

        try {
            const response = await axios.get(URL);

                document.getElementById("social-link").innerHTML=(`
                    <a target="_blank" class="text-gradient" href="${response.data['fbLink']}"><i class="bi bi-facebook"></i></a>
                    <a target="_blank" class="text-gradient" href="${response.data['twitterLink']}"><i class="bi bi-twitter"></i></a>
                    <a target="_blank" class="text-gradient" href="${response.data['linkedinLink']}"><i class="bi bi-linkedin"></i></a>
                    <a target="_blank" class="text-gradient" href="${response.data['githubLink']}"><i class="bi bi-github"></i></a>
                `);
        } catch (error){
            alert(error);
        }

    }
</script>
