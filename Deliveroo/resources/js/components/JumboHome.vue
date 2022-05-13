<template>
  <section class="container-fluid contanier-jumbo">
        <div class="jumbo-title">
            <span>Benvenuti in Deliveboo!</span>
        </div>
  </section>
</template>

<script>
export default {

}
</script>

<style lang="scss">
    .contanier-jumbo {
        display: flex;
        justify-content: center;
        height: 400px;

        .box-carousel {
            width: 400px;
        }
    
        .jumbo-title {
            position: relative;
            width: 510px;
            height: fit-content;
            margin-top: 40px;
            text-align: center;

            span {
                font-size: 45px;
                color: #FF4718;
            }
        }

        .jumbo-title::before {
            content: '';
            position: absolute;
            width: 0;
            left: 0;
            top: 10px;
            height: 50px;
            background-color: #8559b2;
            opacity: 0.6;
            border-radius: 5px;
            animation: reveal 1s ease-out 0.5s forwards;
            z-index: 1;
        }

        @keyframes reveal {
            0% {
                left: 0;
                right: 100%;
                width: 0;
            }
            50% {
                left: 0;
                right: 0;
                width: 100%;
            }
            100% {
                left: 100%;
                right: 0;
                width: 0;
            }
        }
    }

</style>>
