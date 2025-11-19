import React, { useState, useEffect } from 'react';
import axios from 'axios';
import { toast } from 'react-toastify';

const Offices = () => {
  const [offices, setOffices] = useState([]);
  const [loading, setLoading] = useState(false);
  const [showModal, setShowModal] = useState(false);
  const [editingOffice, setEditingOffice] = useState(null);
  const [formData, setFormData] = useState({
    name: '',
    type: 'HEAD',
    parent_id: '',
    address: '',
    lat: '',
    lng: ''
  });
  const [errors, setErrors] = useState({});

  useEffect(() => {
    fetchOffices();
  }, []);

  const fetchOffices = async () => {
    setLoading(true);
    try {
      const response = await axios.get('/api/offices');
      if (response.data.success) {
        setOffices(response.data.data);
      }
    } catch (error) {
      toast.error('Failed to fetch offices');
    } finally {
      setLoading(false);
    }
  };

  const handleSubmit = async (e) => {
    e.preventDefault();
    setErrors({});
    
    try {
      const url = editingOffice ? `/api/offices/${editingOffice.id}` : '/api/offices';
      const method = editingOffice ? 'put' : 'post';
      
      const response = await axios[method](url, formData);
      
      if (response.data.success) {
        toast.success(response.data.message);
        fetchOffices();
        closeModal();
      }
    } catch (error) {
      if (error.response?.data?.errors) {
        setErrors(error.response.data.errors);
      } else {
        toast.error('Operation failed');
      }
    }
  };

  const handleDelete = async (id) => {
    if (!window.confirm('Are you sure you want to delete this office?')) return;
    
    try {
      const response = await axios.delete(`/api/offices/${id}`);
      if (response.data.success) {
        toast.success(response.data.message);
        fetchOffices();
      }
    } catch (error) {
      toast.error('Failed to delete office');
    }
  };

  const openModal = (office = null) => {
    setEditingOffice(office);
    setFormData(office || {
      name: '',
      type: 'HEAD',
      parent_id: '',
      address: '',
      lat: '',
      lng: ''
    });
    setErrors({});
    setShowModal(true);
  };

  const closeModal = () => {
    setShowModal(false);
    setEditingOffice(null);
    setFormData({ name: '', type: 'HEAD', parent_id: '', address: '', lat: '', lng: '' });
    setErrors({});
  };

  return (
    <div className="p-6">
      <div className="flex justify-between items-center mb-6">
        <h1 className="text-2xl font-bold">Offices</h1>
        <button
          onClick={() => openModal()}
          className="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600"
        >
          Add Office
        </button>
      </div>

      {loading ? (
        <div className="text-center py-8">Loading...</div>
      ) : (
        <div className="bg-white rounded-lg shadow overflow-hidden">
          <table className="min-w-full">
            <thead className="bg-gray-50">
              <tr>
                <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Type</th>
                <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Parent</th>
                <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Address</th>
                <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
              </tr>
            </thead>
            <tbody className="divide-y divide-gray-200">
              {offices.map((office) => (
                <tr key={office.id}>
                  <td className="px-6 py-4 whitespace-nowrap">{office.name}</td>
                  <td className="px-6 py-4 whitespace-nowrap">
                    <span className={`px-2 py-1 text-xs rounded ${office.type === 'HEAD' ? 'bg-blue-100 text-blue-800' : 'bg-gray-100 text-gray-800'}`}>
                      {office.type}
                    </span>
                  </td>
                  <td className="px-6 py-4 whitespace-nowrap">{office.parent?.name || '-'}</td>
                  <td className="px-6 py-4 whitespace-nowrap">{office.address}</td>
                  <td className="px-6 py-4 whitespace-nowrap space-x-2">
                    <button
                      onClick={() => openModal(office)}
                      className="text-blue-600 hover:text-blue-900"
                    >
                      Edit
                    </button>
                    <button
                      onClick={() => handleDelete(office.id)}
                      className="text-red-600 hover:text-red-900"
                    >
                      Delete
                    </button>
                  </td>
                </tr>
              ))}
            </tbody>
          </table>
        </div>
      )}

      {showModal && (
        <div className="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
          <div className="bg-white rounded-lg p-6 w-full max-w-md">
            <h2 className="text-xl font-bold mb-4">
              {editingOffice ? 'Edit Office' : 'Add Office'}
            </h2>
            
            <form onSubmit={handleSubmit} className="space-y-4">
              <div>
                <label className="block text-sm font-medium mb-1">Name</label>
                <input
                  type="text"
                  value={formData.name}
                  onChange={(e) => setFormData({...formData, name: e.target.value})}
                  className="w-full border rounded px-3 py-2"
                />
                {errors.name && <p className="text-red-500 text-sm">{errors.name[0]}</p>}
              </div>

              <div>
                <label className="block text-sm font-medium mb-1">Type</label>
                <select
                  value={formData.type}
                  onChange={(e) => setFormData({...formData, type: e.target.value})}
                  className="w-full border rounded px-3 py-2"
                >
                  <option value="HEAD">HEAD</option>
                  <option value="SUB_HEAD">SUB_HEAD</option>
                </select>
                {errors.type && <p className="text-red-500 text-sm">{errors.type[0]}</p>}
              </div>

              <div>
                <label className="block text-sm font-medium mb-1">Parent Office</label>
                <select
                  value={formData.parent_id}
                  onChange={(e) => setFormData({...formData, parent_id: e.target.value})}
                  className="w-full border rounded px-3 py-2"
                >
                  <option value="">None</option>
                  {offices.filter(o => o.type === 'HEAD' && o.id !== editingOffice?.id).map(office => (
                    <option key={office.id} value={office.id}>{office.name}</option>
                  ))}
                </select>
                {errors.parent_id && <p className="text-red-500 text-sm">{errors.parent_id[0]}</p>}
              </div>

              <div>
                <label className="block text-sm font-medium mb-1">Address</label>
                <textarea
                  value={formData.address}
                  onChange={(e) => setFormData({...formData, address: e.target.value})}
                  className="w-full border rounded px-3 py-2"
                  rows="3"
                />
                {errors.address && <p className="text-red-500 text-sm">{errors.address[0]}</p>}
              </div>

              <div className="grid grid-cols-2 gap-4">
                <div>
                  <label className="block text-sm font-medium mb-1">Latitude</label>
                  <input
                    type="number"
                    step="any"
                    value={formData.lat}
                    onChange={(e) => setFormData({...formData, lat: e.target.value})}
                    className="w-full border rounded px-3 py-2"
                  />
                  {errors.lat && <p className="text-red-500 text-sm">{errors.lat[0]}</p>}
                </div>
                <div>
                  <label className="block text-sm font-medium mb-1">Longitude</label>
                  <input
                    type="number"
                    step="any"
                    value={formData.lng}
                    onChange={(e) => setFormData({...formData, lng: e.target.value})}
                    className="w-full border rounded px-3 py-2"
                  />
                  {errors.lng && <p className="text-red-500 text-sm">{errors.lng[0]}</p>}
                </div>
              </div>

              <div className="flex justify-end space-x-2 pt-4">
                <button
                  type="button"
                  onClick={closeModal}
                  className="px-4 py-2 text-gray-600 border rounded hover:bg-gray-50"
                >
                  Cancel
                </button>
                <button
                  type="submit"
                  className="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600"
                >
                  {editingOffice ? 'Update' : 'Create'}
                </button>
              </div>
            </form>
          </div>
        </div>
      )}
    </div>
  );
};

export default Offices;