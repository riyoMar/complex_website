<!--
-->
<script>
    export default {
        data() {
            return {
                ref: null,
                desc: [
                    "Coffee coffee coffee coffee coffee coffee",
                    "Coffee coffee coffee coffee",
                    "Coffee",
                ],
            }
        },
        methods: {
            goProduct() {
                this.$refs.targetProduct.scrollIntoView({ behavior: 'smooth' });
            }
        }
    };
</script>

<script setup>
 import { Head } from '@inertiajs/vue3'

</script>

<template>
    <Head title= "Admin" />
    <div id="parentGroup">
        <div class="passHeader">
            <div class="card border border-secondary mx-2 pt-4" id="header">
                <!-- model 3 -->
                <!-- <div class="container card-body my-3 position-relative">
                    <button class="btn btn-outline-secondary position-absolute top-0 start-0 translate-middle px-5">Product</button>
                    <button class="btn btn-outline-secondary position-absolute top-0 start-50 translate-middle px-5">Views</button>
                    <button class="btn btn-outline-secondary position-absolute top-0 start-100 translate-middle px-5">Contact</button>
                </div> -->

                <!-- model 2 -->
                <!-- add mt-2 -->
                <div class="container card-body row-cols-3 my-3">
                    <button class="btn btn-outline-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#product" aria-expanded="false" @click="goProduct">Product</button>

                    <button class="btn btn-outline-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#views" aria-expanded="false">Views</button>

                    <button class="btn btn-outline-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#contact" aria-expanded="false">Contact</button>
                </div>

                <!-- model 1 -->
                <!-- <div class="container card-body my-3">
                    <button class="btn btn-outline-secondary mx-5">Product</button>
                    <button class="btn btn-outline-secondary mx-5">Views</button>
                    <button class="btn btn-outline-secondary mx-5">Contact</button>
                </div> -->
            </div>
        </div>


        <!-- !show for collapse product -->

        <!-- <div id="product"> -->

        <!-- <div id="product"  ref="targetProduct" aria-hidden="true" style="display: none" class="modal modal-dialog" > -->
            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->

        <!-- <div id="product" class="collapse" ref="targetProduct" data-bs-parent="#parentGroup"> -->
        <div id="product" class="collapse" data-bs-parent="#parentGroup">
            <!-- <h3 class="container display-6 text-start">List of Products</h3> -->
            <h3 class="display-6">List of Products</h3>

            <table class="table table-dark container" id="parentTable">
                <thead>
                    <tr>
                        <th class="text-center fs-4" style="width: 3vw;">ID</th>
                        <th class="text-center fs-4" style="width: 45vw;">Product Name</th>
                        <th class="text-center fs-4">Actions</th>
                    </tr>
                </thead>

                <!-- "collapse [attr.data-target]="'#collapseExample'+{{i}}" -->

                <tbody v-for="index in 2">
                <!-- <tbody v-for="(describes, index) in desc" :key="describes"> -->

                    <tr>
                        <td class="table-active text-center fs-5">{{ index }}</td>
                        <!-- <td class="table-active text-center fs-5">{{ index+1 }}</td> -->

                        <!-- <td style="padding-left: 1em;">Coffee coffee coffee coffee coffee coffee coffee coffee coffee coffee coffee coffee coffee coffee coffee coffee coffee coffee coffee coffee coffee</td> -->
                        <td style="padding-left: 1em;" class="fs-5">Coffee</td>
                        <!-- <td style="padding-left: 1em;" class="fs-5">{{ describes }}</td> -->
                        <td class="text-end">
                            <!-- <button class="btn btn-secondary mx-4 px-4" data-bs-toggle="collapse" data-bs-target="'#productEdit'+n">Edit</button> -->
                            <button class="btn btn-secondary mx-4 px-4 fs-5" data-bs-toggle="collapse" :data-bs-target="`#productEdit-${index}`">Edit</button>
                            <!-- <button class="btn btn-secondary mx-4 px-4 fs-5" data-bs-toggle="collapse" :data-bs-target="`#productEdit-${index+1}`">Edit</button> -->
                            <button class="btn btn-secondary mx-4 px-4 fs-5">Delete</button>
                        </td>
                    </tr>

                    <!-- <tr>
                        <td class="table-active text-center">{{ 2*n }}</td>
                        <td style="padding-left: 1em;">Coffee coffee</td>
                        <td class="text-end">
                            <button class="btn btn-secondary mx-4 px-4">Edit</button>
                            <button class="btn btn-secondary mx-4 px-4">Delete</button>
                        </td>
                    </tr> -->

                    <!-- <tr id="'productEdit'+n" class="collapse"> -->
                    <tr :id="`productEdit-${index}`" class="collapse">
                    <!-- <tr :id="`productEdit-${index+1}`" class="collapse"> -->
                        <td class="text-center" colspan="3">
                            <table class="table table-dark">
                                <thead class="text-center fs-5">
                                    <tr>
                                        <th colspan="2">Product Name</th>
                                        <!-- <th colspan="2">{{ describes }}</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="table-active fs-5" style="width: 20vw">ID</td>
                                        <td class="fs-5">{{ index }}</td>
                                        <!-- <td class="fs-5">{{ index+1 }}</td> -->

                                    </tr>
                                    <tr>
                                        <td class="table-active fs-5">Short Describes</td>
                                        <td class="fs-5">Max. characters 150 character character character character character character character character character character character character character</td>
                                    </tr>
                                    <tr class="fs-5">
                                        <td class="table-active">Product Describes</td>
                                        <td>Just looking when need to scrolldown</td>
                                    </tr>
                                    <tr>
                                        <td class="table-active fs-5">Pictures/Videos</td>
                                        <td>
                                            <tr class="fs-5">
                                                <td>name_of_pictures.jpg</td>
                                                <td class="text-end px-3" style="width: 100%">
                                                    <button class="btn btn-secondary px-4 fs-5">Delete</button>
                                                </td>
                                            </tr>
                                            <hr>
                                            <tr>
                                                <td>
                                                    <!-- <button class="btn btn-secondary px-4 fs-5" style="margin-left: 25vw">Add</button> -->
                                                    <button class="btn btn-secondary px-4 fs-5" style="margin-left: 28vw">Add</button>
                                                    <!-- <button class="btn btn-secondary mx-5 px-4 fs-5" data-bs-toggle="modal" :data-bs-target="`#viewPicture-${index}`">View</button> -->
                                                    <!-- <button class="btn btn-secondary mx-5 px-4 fs-5" type="button" data-bs-toggle="modal" data-bs-target="#viewPicture">View</button> -->
                                                </td>
                                                <td>
                                                    <div class="container">
                                                        <!-- !show modal view pictures -->
                                                        <!-- <div class="modal fade" :id="`viewPicture-${index}`"  data-bs-keyboard="false" tabindex="-1" aria-hidden="true"> -->
                                                        <div class="modal fade" id="viewPicture" role="dialog" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body" style="min-height: 30vh">
                                                                        <!-- <p class="text-start">This for Carousel Pictures/Videos</p> -->
                                                                        <h3 class="text-center">Index now: {{ index }}</h3>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <h3>This footer of the modal</h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- show modal view pictures! -->
                                                    </div>
                                                </td>
                                            </tr>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td class="text-center" colspan="2">
                                            <button class="btn btn-secondary px-4 fs-5">Submit</button>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </td>
                    </tr>

                    <!-- <tr>
                        <td class="table-active text-center">{{ 3*n }}</td>
                        <td style="padding-left: 1em;">Coffee</td>
                        <td class="text-end">
                            <button class="btn btn-secondary mx-4 px-4">Edit</button>
                            <button class="btn btn-secondary mx-4 px-4">Delete</button>
                        </td>
                    </tr> -->
                </tbody>

                <!-- <tbody id="productEdit" class="collapse" data-bs-parent="#parentTable">
                    <tr>
                        <td class="text-center" colspan="3">Coffee coffee</td>
                    </tr>
                </tbody> -->

                <tfoot>
                    <tr>
                        <td class="text-center" colspan="3">
                            <button class="btn btn-secondary px-5 fs-5">Add</button>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <!-- show for collapse product! -->

        <!-- !show for collapse views -->
        <div id="views" class="collapse" data-bs-parent="#parentGroup">
            <!-- <h3 class="container display-6 text-start">Views</h3> -->
            <h3 class="display-6">Views</h3>
            <div class="container">
                <table class="table table-dark">
                    <thead class="fs-4">
                        <th scope="row" colspan="2" class="text-center">Edit Picture</th>
                    </thead>
                    <tbody>
                        <tr class="fs-5">
                            <td style="padding-left: 1em;">image.jpg</td>
                            <!-- <td style="text-align: right;"> -->
                            <td class="text-end">
                                <button type="button" class="btn btn-secondary mx-4 px-4 fs-5">Edit</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="container">
                <table class="table table-dark">
                    <thead class="fs-4">
                        <th scope="row" class="text-center">Edit Text</th>
                    </thead>
                    <tbody class="fs-5">
                        <tr class="table-active">
                            <td style="padding-left: 1em;">Interlude</td>
                        </tr>

                        <tr>
                            <td style="padding-left: 1em;">Text Here aaaaaaaaaaaaaa</td>
                        </tr>

                        <td class="text-end">
                            <div>
                                <button type="button" class="btn btn-secondary  mx-4 px-4 fs-5">Edit</button>
                                <button type="button" class="btn btn-secondary  mx-4 px-4 fs-5">Hapus</button
                            ></div>
                        </td>

                        <tr class="table-active">
                            <td style="padding-left: 1em;">Introduction</td>
                        </tr>
                        <tr>
                            <td style="padding-left: 1em;">Text Here aaaaaaaaaaaaaa</td>
                        </tr>
                        <tr>
                            <td class="text-end">
                                <div>
                                    <button type="button" class="btn btn-secondary  mx-4 px-4 fs-5">Edit</button>
                                    <button type="button" class="btn btn-secondary  mx-4 px-4 fs-5">Hapus</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="text-center">
                                <button type="button" class="btn btn-secondary fs-5">Submit</button>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <!-- show for collapse views! -->

        <!-- !show for collapse contact -->
        <div id="contact" class="collapse" data-bs-parent="#parentGroup">
            <!-- <h3 class="container display-6 text-start">Contacts</h3> -->
            <h3 class="display-6">Contacts</h3>

            <table class="table table-dark container">
                <thead class="fs-4">
                    <tr>
                        <th class="text-center" style="width: 15vw;">Contact List</th>
                        <th class="text-center">Links</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="fs-5">
                    <tr>
                        <td class="table-active text-center">Facebook</td>
                        <td style="padding-left: 1em;">https://facebook.com</td>
                        <td class="table-active text-center">
                            <button class="btn btn-secondary mx-4 px-4 fs-5">Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-active text-center">Instagram</td>
                        <td style="padding-left: 1em;">https://instagram.com</td>
                        <td class="table-active text-center">
                            <button class="btn btn-secondary mx-4 px-4 fs-5">Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-active text-center">Twitter</td>
                        <td style="padding-left: 1em;">https://twitter.com</td>
                        <td class="table-active text-center">
                            <button class="btn btn-secondary mx-4 px-4 fs-5">Edit</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- show for collapse contact! -->

    </div>

</template>

<style scoped>
    #product {
        /* min-height: 100vh; */
    }
    .passHeader{
        /* min-height: 100vh; */
    }
    #header {
        top: -3rem
    }
</style>