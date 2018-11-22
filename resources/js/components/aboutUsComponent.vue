<template>
    <div>
        <div class="aboutus-caption">
            <h1>About Us</h1>
           <h4>Try to know my about us and you will bew glad indeed</h4> 
        </div>
        <div class="container">
            <div class="item">left</div>
            <div class="item">center</div>
            <div class="item">right</div>
        </div>
    </div>
</template>
<script>
export default {
    
        mounted() {
            console.log('Component mounted.')
        }
}


</script>


<style>
    .container{
        display: grid;
       grid-template-columns: repeat( 3, 1fr );
       grid-gap: 20px;
       grid-auto-rows: minmax(300px, auto);
    
       
    }
    .item{
        background-color: blue;
    }
    .aboutus-caption{
        max-width: 100%;
        height: 110px;
        margin-top: 1.5rem;
        padding-top: 2em;
        text-align: center;
        margin-bottom: 1.5rem;
        line-height: 1.5rem;
    }
</style>


