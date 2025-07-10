"use client";
import { useState, useEffect } from 'react';

interface AdminData {
  users?: any[];
  stats?: any;
}

export default function AdminPage() {
  const [data, setData] = useState<AdminData>({});
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    // Exemple d'appel à l'API Laravel
    const fetchData = async () => {
      try {
        const response = await fetch('http://localhost:8000/api/admin/stats');
        const result = await response.json();
        setData(result);
      } catch (error) {
        console.error('Erreur lors de la récupération des données:', error);
      } finally {
        setLoading(false);
      }
    };

    fetchData();
  }, []);

  return (
    <div className="min-h-screen bg-gray-50 dark:bg-gray-900">
      <div className="container mx-auto px-4 py-8">
        <h1 className="text-3xl font-bold text-gray-900 dark:text-white mb-8">
          Administration
        </h1>
        
        {loading ? (
          <div className="text-center">
            <div className="animate-spin rounded-full h-12 w-12 border-b-2 border-primary mx-auto"></div>
            <p className="mt-4 text-gray-600 dark:text-gray-400">Chargement...</p>
          </div>
        ) : (
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            {/* Cartes de statistiques */}
            <div className="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
              <h3 className="text-lg font-semibold text-gray-900 dark:text-white mb-2">
                Utilisateurs
              </h3>
              <p className="text-3xl font-bold text-primary">
                {data.stats?.users || 0}
              </p>
            </div>
            
            <div className="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
              <h3 className="text-lg font-semibold text-gray-900 dark:text-white mb-2">
                Connexions
              </h3>
              <p className="text-3xl font-bold text-primary">
                {data.stats?.connections || 0}
              </p>
            </div>
            
            <div className="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
              <h3 className="text-lg font-semibold text-gray-900 dark:text-white mb-2">
                Status
              </h3>
              <p className="text-3xl font-bold text-green-500">
                En ligne
              </p>
            </div>
          </div>
        )}
      </div>
    </div>
  );
} 