
let popuCard = document.querySelector('.review')
function populateCard() {

    let ads = [
        { title: 'Pinco Pallino', description: '"Mi reco da anni nello studio del dottor Colapietro,lo staff ed il dottore hanno una sensibilità e competenza ineccepibile,è come sentirsi a casa."' },
        { title: 'Gianni Bugliasco', description: '"Mi reco da anni nello studio del dottor Colapietro,lo staff ed il dottore hanno una sensibilità e competenza ineccepibile,è come sentirsi a casa."' },
        { title: 'Enzuccio Maresca', description: '"Mi reco da anni nello studio del dottor Colapietro,lo staff ed il dottore hanno una sensibilità e competenza ineccepibile,è come sentirsi a casa."' },
        { title: 'Giuseppe Bonni', description: '"Mi reco da anni nello studio del dottor Colapietro,lo staff ed il dottore hanno una sensibilità e competenza ineccepibile,è come sentirsi a casa."' },
    ]

    ads.forEach(ad => {
        let card = document.createElement('div')
        card.innerHTML = `<div class="col-6 mt-5 mb-5 card-staff">
                                <h5 class="mt-5 text-light"><i class="far fa-smile text-light"></i> ${ad.title}</h5>
                                <img src="https://cdn.trustpilot.net/brand-assets/4.1.0/stars/stars-5.svg" alt="star" class="star">
                                <cite class="mt-5 text-light">${ad.description}</cite>
                          </div>             
        `
        popuCard.appendChild(card)
    })
}

if (popuCard) {
    populateCard()
}

let cardstaff = document.querySelector('.card-staff')
function populateStaff() {

    let ads = [
        { title: 'Dottor Sapanizza', img: '/img/volto1.jpg' , description: '"Esperto di Odontoiatria conservativa e laureato a pieni voti in Implantologia e Chirurgia orale."' },
        { title: 'Dottoressa Bugliasco', img: '/img/volto2.jpg' , description: '"Giovane e brillante dottore,membro da poco del nostro team di medici,vanta già numerosi interventi di impiantistica e Protesi dentaria"' },
        { title: 'Dottor Maresca', img: '/img/volto3.jpg' , description: '"Considerato un luminare della Semeiotica odontostomatologica,il dottor Maresca è un maestro in campo dentistico. Veterano del Team Colapietro"' },
        { title: 'Dottor Bonni', img: '/img/volto4.jpg' , description: '"Esperto in Endodonzia e Anestesiologia applicata vanta numerosi interventi alle spalle e centiaia di pazienti soddisfatti"' },
        { title: 'Dottor Colapietro', img: '/img/volto5.jpg' , description: '"Fondatore e direttore dello Studio Colapietro,da anni maestro e coordinatore dello staff"' },
        { title: 'Dottor Bonni', img: '/img/volto6.jpg' , description: '"Esperto in Endodonzia e Anestesiologia applicata vanta numerosi interventi alle spalle e centiaia di pazienti soddisfatti"' },
    ]

    ads.forEach(ad => {
        let card = document.createElement('div')
        card.innerHTML = `
                            <div class="card card-staff m-5 p-3" style="width: 18rem;">
                                <img class="card-img-top" src="${ad.img}" alt="Card image cap">
                                <hr>
                                <div class="card-body">
                                <h5 class="card-title2">${ad.title}</h5>
                                <hr>
                                <p class="card-text2">${ad.description}</p>
                                </div>
                            </div>  
                                      
        `
        cardstaff.appendChild(card)
    })
}

if (cardstaff) {
    populateStaff()
}

/*  */







