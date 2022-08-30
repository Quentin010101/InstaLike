import axios from 'axios';
import './bootstrap';

window.addEventListener('DOMContentLoaded', (e) => {
    
    function showLoading(){
        document.getElementById('loading-component').classList.remove('hidden')
    }
    function hideLoading(){
        document.getElementById('loading-component').classList.add('hidden')
    }

    window.addEventListener('scroll', (e) => {
        
        if((window.innerHeight + window.scrollY) >= document.body.offsetHeight){
            showLoading()
            let url = window.location.href;
            let nextCursor = document.getElementById('next-cursor').innerHTML || null
            
            if(nextCursor){
                axios({
                    method: 'get',
                    url: url + '?cursor=' + nextCursor,
                    responseType: 'json',
                    data: {
                        nextCursor: nextCursor,
                    } 
                }).then((response) => {
                    if(response.data.success){
                        document.getElementById('new-images').insertAdjacentHTML('beforeend', response.data.html)
                        
                        document.getElementById('next-cursor').innerHTML = response.data.nextCursor

                        hideLoading()
                    }
                }).catch((error) => {
                    console.log(error)
                })
            }

        }
    })
})
