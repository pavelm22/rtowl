// src/router.js
import { createRouter, createWebHistory } from 'vue-router'
import AboutUsViewView from '../views/AboutUsView.vue'
import Team from '../components/Pages/Team/Team.vue'
import DataPolicy from '../components/Pages/DataPolicy/DataPolicy.vue'
import Impressum from '../components/Pages/Impressum/Impressum.vue'
import Sponsors from '../components/Pages/Sponsors/Sponsors.vue'
import Contact from '../components/Pages/Contact/Contact.vue'

const routes = [
    {
        path: '/',
        name: 'home',
        component: () => import('../views/HomeView.vue'),
        meta: {
            showThreeScene: true,
            title: 'OWL Racing - Home'
        }
    },
    {
        path: '/about-us',
        name: 'aboutUs',
        component: () => import('../views/AboutUsView.vue'),
        meta: {
            showThreeScene: true,
            title: 'OWL Racing - Über Uns'
        }
    },
    {
        path: '/sponsors',
        name: 'sponsors',
        component: () => import('../views/SponsorsView.vue'),
        meta: {
            showThreeScene: true,
            title: 'OWL Racing - Sponsoren'
        }
    },
    {
        path: '/team',
        name: 'team',
        component: () => import('../views/TeamView.vue'),
        meta: {
            showThreeScene: true,
            title: 'OWL Racing - Team'
        }
    },
    {
        path: '/data-policy',
        name: 'data_policy',
        component: () => import('../views/DataPolicyView.vue'),
        meta: {
            showThreeScene: true,
            title: 'OWL Racing - Datenschutz'
        }
    },
    {
        path: '/impressum',
        name: 'impressum',
        component: () => import('../views/ImpressumView.vue'),
        meta: {
            showThreeScene: true,
            title: 'OWL Racing - Impressum'
        }
    },
    {
        path: '/contact',
        name: 'contact',
        component: () => import('../views/ContactView.vue'),
        meta: {
            showThreeScene: true,
            title: 'OWL Racing - Kontakt'
        }
    },
    // Catch-all route for 404
    {
        path: '/:pathMatch(.*)*',
        redirect: '/'
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes,
    scrollBehavior(to, from, savedPosition) {
        // Scroll to top on navigation
        return { top: 0 }
    }
})

// Global before hook to update page title and analytics
router.beforeEach((to, from, next) => {
    // Update page title
    document.title = to.meta.title || 'OWL Racing'

    // Any other navigation guards (analytics, auth, etc.)

    next()
})

export default router