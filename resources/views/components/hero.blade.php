<header class="py-5">
    <div class="container px-5 pb-5">
        <div id="hero-data" class="row gx-5 align-items-center">

        </div>
    </div>
</header>

<script>
    GetHeroData();
    async function GetHeroData(){
        let URL="/heroData";

        try {
            const response = await axios.get(URL);

            document.getElementById("hero-data").innerHTML=(`
                    <div class="col-xxl-5">
                        <div class="text-center text-xxl-start">
                            <div class="badge bg-gradient-primary-to-secondary text-white mb-4">
                                <div class="text-uppercase">${response.data['keyLine']}</div>
                            </div>
                            <div class="fs-3 fw-light text-muted">${response.data['title']}</div>
                            <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">${response.data['sortTitle']}</span></h1>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                                <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="">Resume</a>
                                <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="">Projects</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-7">
                        <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                            <div class="profile">
                                <img class="profile-img" src="${response.data['img']}" alt="Image" />
                            </div>
                        </div>
                    </div>
                `);
        } catch (error){
            alert(error);
        }

    }
</script>
