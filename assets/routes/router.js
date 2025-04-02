// src/router.js
import { createRouter, createWebHistory } from 'vue-router'

const homeRoutes = [
    {
        path: '/',
        name: 'home',
        component: () => import('../views/HomeView.vue'),
        meta: {
            showThreeScene: true,
            title: 'Home'
        }
    },
    {
        path: '/about-us',
        name: 'aboutUs',
        component: () => import('../views/AboutUsView.vue'),
        meta: {
            showThreeScene: true,
            title: 'Über Uns'
        }
    },
    {
        path: '/sponsors',
        name: 'sponsors',
        component: () => import('../views/SponsorsView.vue'),
        meta: {
            showThreeScene: true,
            title: 'Sponsoren'
        }
    },
    {
        path: '/team',
        name: 'team',
        component: () => import('../views/TeamView.vue'),
        meta: {
            showThreeScene: true,
            title: 'Team'
        }
    },
    {
        path: '/data-policy',
        name: 'data_policy',
        component: () => import('../views/DataPolicyView.vue'),
        meta: {
            showThreeScene: true,
            title: 'Datenschutz'
        }
    },
    {
        path: '/legal-notice',
        name: 'legal_notice',
        component: () => import('../views/LegalNoticeView.vue'),
        meta: {
            showThreeScene: true,
            title: 'Impressum'
        }
    },
    {
        path: '/contact',
        name: 'contact',
        component: () => import('../views/ContactView.vue'),
        meta: {
            showThreeScene: true,
            title: 'Kontakt'
        }
    },
]

const dashboardRoutes = [
    {
        path: '/dashboard',
        component: () => import('../views/DashboardView.vue'),
        children: [
            {
                path: '',
                name: 'overview',
                component: () => import('@/components/Dashboard/Views/Overview.vue'),
                meta: {
                    showThreeScene: false,
                    title: 'Dashboard - Overview'
                }
            },
            {
                path: 'team',
                name: 'dash-team',
                component: () => import('@/components/Dashboard/Views/Team.vue'),
                meta: {
                    showThreeScene: false,
                    title: 'Dashboard - Team'
                }
            },
            {
                path: 'sponsors',
                name: 'dash-sponsors',
                component: () => import('@/components/Dashboard/Views/Sponsors.vue'),
                meta: {
                    showThreeScene: false,
                    title: 'Dashboard - Sponsors'
                }
            },
            {
                path: 'team-member',
                name: 'dash-team-member',
                component: () => import('@/components/Dashboard/Views/TeamMember.vue'),
                meta: {
                    showThreeScene: false,
                    title: 'Dashboard - Team Member'
                }
            }
        ],
        meta: {
            showThreeScene: false,
            title: 'Dashboard'
        }
    },
]
const routes = [
    ...homeRoutes,
    ...dashboardRoutes,
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
        return { top: 0 }
    }
})

router.beforeEach((to, from, next) => {
    // Update page title
    document.title = to.meta.title || 'OWL Racing'

    // Any other navigation guards (analytics, auth, etc.)

    next()
})

export default router