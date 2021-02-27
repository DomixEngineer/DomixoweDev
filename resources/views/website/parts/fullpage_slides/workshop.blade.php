<section class="section workshop" data-anchor="workshop">   
    <div class="mainContainer">
        <div class="workshop-heading">
            <h1 class="workshop-heading-header">MÓJ WARSZTAT</h1>
        </div>
        <div class="workshop-categories">
            <ul class="workshop-categories-menu">
                <li class="workshop-categories-menu-singleCategory" :class="{ 'active' : selectedCategory == 'all'  }" @click="setCategoryWithLoading('all')">
                    <p class="workshop-categories-menu-singleCategory-category">WSZYSTKO</p>
                </li>
                <li class="workshop-categories-menu-singleCategory" :class="{ 'active' : selectedCategory == 'front'  }" @click="setCategoryWithLoading('front')">
                    <p class="workshop-categories-menu-singleCategory-category">FRONT-END</p>
                </li>
                <li class="workshop-categories-menu-singleCategory" :class="{ 'active' : selectedCategory == 'back'  }" @click="setCategoryWithLoading('back')">
                    <p class="workshop-categories-menu-singleCategory-category">BACK-END</p>
                </li>
                <li class="workshop-categories-menu-singleCategory" :class="{ 'active' : selectedCategory == 'tools'  }" @click="setCategoryWithLoading('tools')">
                    <p class="workshop-categories-menu-singleCategory-category">NARZEDZIA</p>
                </li>
            </ul>
        </div>
        <template v-if="loading">
            <div class="loader">
        </template>
        <div class="workshop-skills">
            <template v-if="!loading">
                <div v-for="skill in selectedCategoryItems" class="workshop-skills-singleSkill">
                    <div class="workshop-skills-singleSkill-till">
                        <img :src="skill.image" class="workshop-skills-singleSkill-till-image" :alt="skill.alt">
                    </div>
                    <p class="workshop-skills-singleSkill-title">${ skill.title }</p>
                </div>
            </template>
        </div>
    </div>          
</section>