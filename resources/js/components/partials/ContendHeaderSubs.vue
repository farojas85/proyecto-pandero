<template>
    <div class="breadcrumbs-dark pt-3 pb-1" id="breadcrumbs-wrapper">
        <!-- Search for small screen-->
        <div class="container">
            <div class="row">
                <div class="col breadcrumbs-left">
                    <h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down">
                        <span>{{ titleCard }}</span>
                    </h5>
                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item">
                            <a href="/dashboard">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">{{  titlePrincipal }}</a>
                        </li>
                        <li class="breadcrumb-item active">
                            {{ titleSub }}
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { toRefs } from 'vue'

    export default {
        props:{
            titleCard: String,
            titlePrincipal:String,
            titleSub: String
        },
        setup(props) {
            const { titleSub, titleCard, titlePrincipal } = toRefs(props)

            return {

            }
        },
    }
</script>
