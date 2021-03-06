<section class="section workshop" data-anchor="workshop">   
    <div class="mainContainer">
        <div class="workshop-heading">
            <h1 class="workshop-heading-header">{{ translate('landingpage.thirdslide.myWorkshop') }}</h1>
        </div>
        <div class="workshop-categories">
            <ul class="workshop-categories-menu">
                <li class="workshop-categories-menu-singleCategory" :class="{ 'active' : selectedCategory == 'all'  }" @click="getSkills()">
                    <p class="workshop-categories-menu-singleCategory-category">{{ translate('landingpage.thirdslide.all') }}</p>
                </li>
                <li class="workshop-categories-menu-singleCategory" :class="{ 'active' : selectedCategory == 'front'  }" @click="getSkillsByCategory('front')">
                    <p class="workshop-categories-menu-singleCategory-category">FRONT-END</p>
                </li>
                <li class="workshop-categories-menu-singleCategory" :class="{ 'active' : selectedCategory == 'back'  }" @click="getSkillsByCategory('back')">
                    <p class="workshop-categories-menu-singleCategory-category">BACK-END</p>
                </li>
                <li class="workshop-categories-menu-singleCategory" :class="{ 'active' : selectedCategory == 'tools'  }" @click="getSkillsByCategory('tools')">
                    <p class="workshop-categories-menu-singleCategory-category">{{ translate('landingpage.thirdslide.tools') }}</p>
                </li>
            </ul>
        </div>
        <template v-if="loading">
            <div class="loader"></div>
        </template>
        <div class="workshop-skills">
            <template v-if="!loading">
                <div v-for="skill in skills" class="workshop-skills-singleSkill">
                    <div class="workshop-skills-singleSkill-till">
                        <img :src="skill.icon_url" class="workshop-skills-singleSkill-till-image" :alt="skill.description">
                    </div>
                    <p class="workshop-skills-singleSkill-title">${ skill.name }</p>
                </div>
            </template>
        </div>
    </div>          
</section>