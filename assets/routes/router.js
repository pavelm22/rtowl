// src/router.js
import { createRouter, createWebHistory } from 'vue-router'

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
        path: '/legal-notice',
        name: 'legal_notice',
        component: () => import('../views/LegalNoticeView.vue'),
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
    {
        path: '/dashboard',
        component: () => import('../views/DashboardView.vue'),
        children: [
            {
                path: '',
                name: 'overview',
                component: () => import('@/components/Dashboard/Views/Overview.vue')
            },
            {
                path: 'team',
                name: 'dash-team',
                component: () => import('@/components/Dashboard/Views/Team.vue'),
            },
            {
                path: 'sponsors',
                name: 'dash-sponsors',
                component: () => import('@/components/Dashboard/Views/Sponsors.vue'),
            },
            {
                path: 'team-member',
                name: 'dash-team-member',
                component: () => import('@/components/Dashboard/Views/TeamMember.vue'),
            }
        ],
        meta: {
            showThreeScene: false,
            title: 'OWL Racing - Dashboard'
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