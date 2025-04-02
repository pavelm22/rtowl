// src/router.js
import { createRouter, createWebHistory } from 'vue-router'

const translatedRoutes = [
    {
        path: '/:lang(de|en)?',
        name: 'public_view',
        component: () => import('../views/PublicView.vue'),
        meta: {
            showThreeScene: true,
        },
        children: [
            {
                path: 'about-us',
                name: 'about',
                component: () => import('../components/Pages/AboutUs/AboutUs.vue'),
                meta: {
                    urlNames: {
                        en: 'about-us',
                        de: 'ueber-uns'
                    }
                }
            },
            {
                path: 'sponsors',
                name: 'sponsors',
                component: () => import('../components/Pages/Sponsors/Sponsors.vue'),
                meta: {
                    urlNames: {
                        en: 'sponsors',
                        de: 'sponsoren'
                    }
                }
            },
            {
                path: 'team',
                name: 'team',
                component: () => import('../components/Pages/Team/Team.vue'),
                meta: {
                    urlNames: {
                        en: 'team',
                        de: 'team'
                    },
                }
            },
            {
                path: 'data-policy',
                name: 'data_policy',
                component: () => import('../components/Pages/Sponsors/Sponsors.vue'),
                meta: {
                    urlNames: {
                        en: 'data-policy',
                        de: 'datenschutz'
                    },
                }
            },
            {
                path: 'legal-notice',
                name: 'legal_notice',
                component: () => import('../components/Pages/LegalNotice/LegalNotice.vue'),
                meta: {
                    urlNames: {
                        en: 'legal-notice',
                        de: 'impressum'
                    },
                }
            },
            {
                path: 'contact',
                name: 'contact',
                component: () => import('../components/Pages/Contact/Contact.vue'),
                meta: {
                    urlNames: {
                        en: 'contact',
                        de: 'kontakt'
                    }
                }
            }
        ]
    }
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
    ...translatedRoutes,
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