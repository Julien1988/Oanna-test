<template>
    <!-- Items -->
    <div
        class="section__main__top__container__section d-flex background-primary col-5 rounded row m-4"
    >
        <div class="section__main__top__container__section__item col-8 mb-4">
            <div class="section__main__top__container__section__item__top mt-4">
                <input
                    type="radio"
                    aria-label="Radio button for following text input"
                />
                <label class="ml-3" for="radio">2020-0001</label>
            </div>
            <div
                class="section__main__top__container__section__item__info d-flex"
            >
                <div
                    class="section__main__top__container__section__item__info__section mr-4"
                >
                    <p
                        class="section__main__top__container__section__item__info__section__text"
                    >
                        {{ msg }}
                    </p>
                    <span>Absolute blacksatin</span>
                </div>
                <div
                    class="section__main__top__container__section__item__info__section"
                >
                    <p
                        class="section__main__top__container__section__item__info__section__text"
                    >
                        Epaisseur
                    </p>
                    <span>12mm</span>
                </div>
            </div>
        </div>
        <div class="section__main__top__container__section__item col-4 ">
            <img
                src="./images-component/image-item.png"
                alt=""
                class="section__main__top__container__section__item__image position-absolute"
            />

            <span
                class="section__main__top__container__section__item__span position-absolute"
                >Avorio</span
            >
        </div>
    </div>
</template>

<script>
export default {
    props: {
        msg: String
    },
    mounted() {
        //console.log(json);
        console.log("Component mounted.");
    }
};
</script>
