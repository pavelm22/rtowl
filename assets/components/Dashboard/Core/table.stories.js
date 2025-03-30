import Table from "@/components/Dashboard/Core/Table.vue";

export default {
    title: "Core/Table",
    component: Table,
};



export const Default = {
    args: {
        columns: [
            { key: 'id', label: 'ID' },
            { key: 'name', label: 'Name' },
            { key: 'email', label: 'Email' },
            { key: 'role', label: 'Role' }
        ],
        data: [
            { id: 1, name: 'John Doe', email: 'john@example.com', role: 'Admin' },
            { id: 2, name: 'Jane Smith', email: 'jane@example.com', role: 'User' },
            { id: 3, name: 'Bob Johnson', email: 'bob@example.com', role: 'Editor' },
            { id: 4, name: 'Alice Brown', email: 'alice@example.com', role: 'User' }
        ]
    }
};
